<?php
$cloudSaveEncryption = 0; // 0 = password string replacement, 1 = cloud save encryption (password dependant)
$sessionGrants = 1; // 0 = GJP check is done every time; 1 = GJP check is done once per hour; drastically improves performance, slightly descreases security; DO NOT SET TO 1 IN 7M.PL OR 5V.PL UNLESS YOU HAVE PREMIUM
$sessionGrantsTime = 60; // Time in minutes, for how much time until a GJP check session expires for an IP, set to 0 or lower to permanently grant access to an IP.
$IPchecking = 1; // 0 = Doesn't check for IP addresses; 1 = Checks IP addresses when needed. You should NOT turn this off, unless getIP() results into 127.0.0.1.
$onlyWebRegistration = 0; // Only allows website GDPS account registration through tools/account/registerAccount.php; Won't apply the website account verification due to being all on website
$accountWebVerification = 0; // Verifies the account using a website tool, called verifyLogin.php. The account wont be able to login until the verification is done; remember to give the tools link to your members to verify their account
?>