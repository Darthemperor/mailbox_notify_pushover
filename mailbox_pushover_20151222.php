<?php
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.pushover.net/1/messages.json",
  CURLOPT_POSTFIELDS => array(
    "token" => "ar5XFose8nqKg6bpSYtXrpfyJe98ft",
    "user" => "uTNShZER3SiSrDdMKUQN1QLBXAk811",
    "message" => "Sie haben Post <(^^<)",
  ),
  CURLOPT_SAFE_UPLOAD => true,
));
curl_exec($ch);
curl_close($ch);
?>