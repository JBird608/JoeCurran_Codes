<p>Your have a new message!</p>

<p>Message from: {{ $request['name'] }}</p>
<p>Using: {{ $request['email'] }}</p>
<p>Phone: @if(isset($request['phone'])) {{ $request['phone'] }} @else None Given! @endif</p>
<p>Twitter {{ $request['topic'] }}</p>

<p>Subject: {{ $request['subject'] }}</p>
<p>Message:</p>
<p>{{ $request['message'] }}</p>

<p>Sent: {{ $request['created_at'] }}</p>

<p>Thanks.</p>