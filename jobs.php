<?php

$title = isset($_GET['title']) && $_GET['title'] != '' ? $_GET['title'] : 'Software Engineer';
$location = isset($_GET['location']) && $_GET['location'] != '' ? $_GET['location'] : 'India';



$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://linkedin-data-scraper.p.rapidapi.com/search_jobs?query=".$title."&location=".$location."&page=1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 120,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: linkedin-data-scraper.p.rapidapi.com",
		"X-RapidAPI-Key: 99a75c4257mshefb18e2e0eee220p146d24jsn8fa9a6366556"
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
if (!isset($jobs["success"]) || !$jobs["success"]) {
    echo "Something Went Wrong";
    exit;
}
$jobs = $jobs["response"]["jobs"];
// print_r($jobs);
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
                        <td><?php echo $job['companyName']; ?></td>
                        <td><?php echo $job['formattedLocation']; ?></td>
                        <td><?php echo $job['jobDescription']; ?></td>
                        <td><?php echo $job['formattedExperienceLevel']; ?></td>
                        <td><?php echo $job['listedAt']; ?></td>
                        <td><a target="_blank" href="<?php echo $job['companyApplyUrl'] != "" ? $job['companyApplyUrl'] : $job['jobPostingUrl']; ?>">Click To Apply</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>