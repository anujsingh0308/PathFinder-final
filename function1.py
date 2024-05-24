import pandas as pd

data = pd.read_csv('ITSkills.csv')  

def get_required_skills(job_role):
    
    skills = data[data['Job Role'] == job_role]['Required Skills'].values
    if len(skills) > 0:
        return skills[0] 
    else:
        return 'Job role not found or skills not specified'

job_role = 'Database Administrator'
required_skills = get_required_skills(job_role)
print(f"Required skills for '{job_role}': {required_skills}")
