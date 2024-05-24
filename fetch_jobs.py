import requests

url = "https://linkedin-jobs-scraper-api.p.rapidapi.com/jobs/csv"

payload = {
	"title": "Software Engineer",
	"location": "India",
	"rows": 100
}
headers = {
	"content-type": "application/json",
	"X-RapidAPI-Key": "99a75c4257mshefb18e2e0eee220p146d24jsn8fa9a6366556",
	"X-RapidAPI-Host": "linkedin-jobs-scraper-api.p.rapidapi.com"
}

response = requests.post(url, json=payload, headers=headers)

with open('jobs.csv', 'wb') as f:
    f.write(response.content)