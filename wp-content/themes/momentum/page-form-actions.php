<?php
if (empty($_POST)) {
    echo 'Not found'; exit;
}

$is_error = false;

if ($maxchat = get_field('maxchat')) {
    $url = $maxchat['endpoint_url']; // Replace with your endpoint
    $token = $maxchat['token'];         // Replace with your actual token

    $numbers = explode(",", $maxchat['send_to']);

    if (is_array($numbers) && count($numbers) > 0) {
        foreach ($numbers as $number) {
            $data = [
                "to" => $number,
                "msgType" => "text",
                "templateId" => $maxchat['template_id'],
                "values" => [
                    "body" => [
                        [
                            "index" => 1,
                            "type" => "text",
                            "text" => $_POST['full_name'],
                        ],
                        [
                            "index" => 2,
                            "type" => "text",
                            "text" => $_POST['phone'],
                        ],
                        [
                            "index" => 3,
                            "type" => "text",
                            "text" => $_POST['company'],
                        ],
                        [
                            "index" => 4,
                            "type" => "text",
                            "text" => $_POST['job_position'],
                        ],
                        [
                            "index" => 5,
                            "type" => "text",
                            "text" => $_POST['monthly_project_budget'],
                        ],
                        [
                            "index" => 6,
                            "type" => "text",
                            "text" => $_POST['project_description'],
                        ]
                    ]
                ]
            ];

            // Initialize cURL
            $ch = curl_init($url);

            // Set cURL options
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer $token",
                "Content-Type: application/json"
            ]);

            // Execute request and get response
            $response = curl_exec($ch);

            // Error handling
            if (curl_errno($ch)) {
                $is_error = true;
            }

            // Close cURL session
            curl_close($ch);
        }
    }
}

if($email = get_field('email')) {
    $sent = wp_mail(explode(",", $email['send_to']), 'Form Submission - ' . $_POST['full_name'] . ' - ' . $_POST['company'], "
<h2>Contact Form Submission:</h2>
<table> 
<tr>
<td>Full Name</td>
<td>:</td>
<td>$_POST[full_name]</td>
</tr>
<tr>
<td>Phone Number</td>
<td>:</td>
<td>$_POST[phone]</td>
</tr>
<tr>
<td>Company/Brand Name</td>
<td>:</td>
<td>$_POST[company]</td>
</tr>
<tr>
<td>Job Position</td>
<td>:</td>
<td>$_POST[job_position]</td>
</tr>
<tr>
<td>Monthly Project Budget</td>
<td>:</td>
<td>$_POST[monthly_project_budget]</td>
</tr>
<td>Project Description</td>
<td>:</td>
<td>$_POST[project_description]</td>
</tr>
</table>
", ['Content-type: text/html; charset=utf-8']);

    if (!$sent) {
        $is_error = true;
    }
}

wp_redirect(site_url('/?form-submission=' . ($is_error ? 'error' : 'success')) . '#contact-form');

?>
