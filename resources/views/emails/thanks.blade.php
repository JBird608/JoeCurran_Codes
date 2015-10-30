<p>Dear, {{ $request['name'] }}.</p>

<p>Thank you for sending me an email. I look forward to reading it. I will hopefully get back to you shortly. Please find a copy of you message below.</p>

---
<p><strong>Message Sent:</strong> {{ $request['created_at'] }}</p>

<p><strong>Subject Reads:</strong>
{{ $request['subject'] }} @if (isset($request['topic'])) on the topic of {{ $request['topic'] }} @endif</p>

<p><strong>Message Reads:</strong></p>
<p>{{ $request['message'] }}</p>

---
<p>@if (isset($request['newsletter'])) I would also like to thank you for joining my mailing list. Please look out for more mail. @endif</p>

<p>Thanks,</p>
<p>Joe Curran.</p>
<p>hello@joecurran.codes</p>