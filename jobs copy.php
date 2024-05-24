<?php

$title = isset($_GET['title']) && $_GET['title'] != '' ? $_GET['title'] : 'Software Engineer';
$location = isset($_GET['location']) && $_GET['location'] != '' ? $_GET['location'] : 'India';


$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://linkedin-jobs-scraper-api.p.rapidapi.com/jobs",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 300,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		'title' => $title,
        'location' => $location,
		'rows' => 10
	]),
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: linkedin-jobs-scraper-api.p.rapidapi.com",
		"X-RapidAPI-Key: 99a75c4257mshefb18e2e0eee220p146d24jsn8fa9a6366556",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
    exit;
} 


$jobs = json_decode($response, true);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Job Listings</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Required Experience</th>
                    <th>Posted At</th>
                    <th>Apply</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job): ?>
                    <tr>
                        <td><?php echo $job['title']; ?></td>
                        <td><a target="_blank" href="<?php echo $job['companyUrl']; ?>"><?php echo $job['companyName']; ?></a></td>
                        <td><?php echo $job['location']; ?></td>
                        <td><?php echo $job['description']; ?></td>
                        <td><?php echo $job['experienceLevel']; ?></td>
                        <td><?php echo $job['postedTime']; ?></td>
                        <td><a target="_blank" href="<?php echo $job['jobUrl']; ?>">Click To Apply</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>