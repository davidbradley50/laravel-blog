Click here to Reset you password <br />
<a href="{{ $link = url('password/reset', $token) . '?email=' . urlencode($user->getEmailForPasswordReset())  }}">{{ $link }}</a>
