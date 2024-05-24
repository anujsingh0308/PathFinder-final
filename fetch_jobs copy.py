import requests

url = "https://linkedin-jobs-search.p.rapidapi.com/"

payload = {
	"search_terms": "python programmer",
	"location": "Chicago, IL",
	"page": "5"
}
headers = {
	"content-type": "application/json",
	"X-RapidAPI-Key": "99a75c4257mshefb18e2e0eee220p146d24jsn8fa9a6366556",
	"X-RapidAPI-Host": "linkedin-jobs-search.p.rapidapi.com"
}

response = requests.post(url, json=payload, headers=headers)

with open('jobs.json', 'wb') as f:
    f.write(response.content)