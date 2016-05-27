<?php
namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
class MessagesController extends Controller
{
    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index()
    {
         // All threads that user is participating in
        // All threads that user is participating in, with new messages
        // $threads = Thread::forUserWithNewMessages($currentUserId)->latest('updated_at')->get();
        $currentUserId = Auth::user()->id;
       // $threads = new Thread();
       // $threads = $threads->scopeForUser($threads,$currentUserId)->get();
        $threads = Thread::forUser($currentUserId)->latest('updated_at')->get();
        $count=$threads->count();
        if(!($count))
        {
            return view('messenger.blank');
        }
        $i=1;
        $t=array();
        foreach ($threads as $thread) {
           $a =\App\User::find($thread->participants()->select('user_id')->where('user_id','!=',Auth::user()->id)->first()->user_id);
           if($a!=null)
           {
            $a=$a->name;
           $t = array_add($t,$i, $a);
            }
            else
            {
                return view('messenger.blank');
            }
           $i++;
        }
        if(empty($t))
        {
            return view('messenger.blank');
        }
        else
        {
        return view('messenger.chatbox',compact('threads','currentUserId','t','count'));
        }
    }
    /**
     * Shows a message thread.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
            return redirect('messages');
        }
    /*   foreach ($thread->messages as $message) {
           dd($message->user->id);
       }*/
       $currentUserId = Auth::user()->id;
        $threads = Thread::forUser($currentUserId)->latest('updated_at')->get();
        // show current user in list if not a current participant
        // $users = User::whereNotIn('id', $thread->participantsUserIds())->get();
        // don't show the current user in list
        $userId = Auth::user()->id;
        //$users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();
        $users = User::findOrFail($thread->creator()->id);
        $user = $users->id;
        $thread->markAsRead($userId);
        return view('messenger.show', compact('thread', 'users','user','threads'));
    }
    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
    public function create($id)
    {
        $users=$id;
      //  $users = Input::get('seller');
      //  $users = User::where('id', '!=', Auth::id())->get();
        return view('messenger.create', compact('users'));
    }
    /**
     * Stores a new message thread.
     *
     * @return mixed
     */
    public function store()
    {
        $input = Input::all();
        $thread = Thread::create(
            [
                'subject' => $input['subject'],
            ]
        );
        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
                'body'      => $input['message'],
            ]
        );
        // Sender
        Participant::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
                'last_read' => new Carbon,
            ]
        );
        // Recipients
        if (Input::has('recipients')) {
            $thread->addParticipants($input['recipients']);
        }
        return redirect('messages');
    }
    /**
     * Adds a new message to a current thread.
     *
     * @param $id
     * @return mixed
     */
    public function update($id)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
            return redirect('messages');
        }
        $thread->activateAllParticipants();
        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::id(),
                'body'      => Input::get('message'),
            ]
        );
        // Add replier as a participant
        $participant = Participant::firstOrCreate(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
            ]
        );
        $participant->last_read = new Carbon;
        $participant->save();
        // Recipients
        if (Input::has('recipients')) {
            $thread->addParticipants(Input::get('recipients'));
        }
        return redirect('messages/' . $id);
    }
}