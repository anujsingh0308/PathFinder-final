import pandas as pd

data = pd.read_csv('ITSkills.csv') 

def get_job_roles_from_input():
    user_input = input("Enter skills (comma-separated): ")
    input_skills = [skill.strip() for skill in user_input.split(',')]  
    matching_roles = []
    for index, row in data.iterrows():
        required_skills = row['Required Skills'].split(', ')  
        if all(skill in required_skills for skill in input_skills):
            matching_roles.append(row['Job Role'])
    return matching_roles

matching_job_roles = get_job_roles_from_input()
if matching_job_roles:
    print(matching_job_roles)
else:
    print("No job roles found that match the input skills.")
