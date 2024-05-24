<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predictor</title>
    <style>
        /* Add your CSS styles here */
        
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(55, 81, 126) ;
        }
       
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #AEB6BF;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="http://127.0.0.1:5000/predict" method="post">
        <label for="db_fun">Database Fundamentals:</label><br>
        <select name="db_fun" id="db_fun">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="comp_arch">Computer Architecture:</label><br>
        <select name="comp_arch" id="comp_arch">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="dist_comp_sys">Distributed Computing Systems:</label><br>
        <select name="dist_comp_sys" id="dist_comp_sys">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="cyber_sec">Cyber Security:</label><br>
        <select name="cyber_sec" id="cyber_sec">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="networking">Networking:</label><br>
        <select name="networking" id="networking">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="software_dev">Software Development:</label><br>
        <select name="software_dev" id="software_dev">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="prog_skills">Programming Skills:</label><br>
        <select name="prog_skills" id="prog_skills">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="proj_mgmt">Project Management:</label><br>
        <select name="proj_mgmt" id="proj_mgmt">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="comp_forensics">Computer Forensics Fundamentals:</label><br>
        <select name="comp_forensics" id="comp_forensics">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="tech_comm">Technical Communication:</label><br>
        <select name="tech_comm" id="tech_comm">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="ai_ml">AI ML:</label><br>
        <select name="ai_ml" id="ai_ml">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="software_eng">Software Engineering:</label><br>
        <select name="software_eng" id="software_eng">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="bus_analysis">Business Analysis:</label><br>
        <select name="bus_analysis" id="bus_analysis">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="comm_skills">Communication skills:</label><br>
        <select name="comm_skills" id="comm_skills">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="data_science">Data Science:</label><br>
        <select name="data_science" id="data_science">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="troubleshoot">Troubleshooting skills:</label><br>
        <select name="troubleshoot" id="troubleshoot">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <label for="graphics_design">Graphics Designing:</label><br>
        <select name="graphics_design" id="graphics_design">
            <option value="1">Not Interested</option>
            <option value="2">Poor</option>
            <option value="3">Beginner</option>
            <option value="4">Average</option>
            <option value="5">Intermediate</option>
            <option value="6">Excellent</option>
            <option value="7">Professional</option>
        </select><br><br>

        <input type="submit" value="Predict">
    </form>
    
</body>
</html>


