from flask import Flask, render_template, request, jsonify
import pickle
import numpy as np

app = Flask(__name__)


@app.route('/')
def career():
    return render_template("hometest.html")


@app.route('/predict',methods = ['POST', 'GET'])
def result():
   if request.method == 'POST':
      result = request.form
      i = 0
      print(result)
      res = result.to_dict(flat=True)
      print("res:",res)
      arr1 = res.values()
      arr = ([(int)(value) for value in arr1])
      print("arr1:",arr)

      data = np.array(arr)

      data = data.reshape(1,-1)
      print(data)
      loaded_model = pickle.load(open("careerlast.pkl", 'rb'))
      predictions = loaded_model.predict(data)
      # return render_template('testafter.html',a=predictions)
      
      print(predictions, "############")
      pred = loaded_model.predict_proba(data)

      all_jobs_predict = list(pred[0])

      jobs_dict = {0:'AI ML Specialist',
                   1:'API Integration Specialist',
                   2:'Application Support Engineer',
                   3:'Business Analyst',
                   4:'Customer Service Executive',
                   5:'Cyber Security Specialist',
                   6:'Data Scientist',
                   7:'Database Administrator',
                   8:'Graphics Designer',
                   9:'Hardware Engineer',
                   10:'Helpdesk Engineer',
                   11:'Information Security Specialist',
                   12:'Networking Engineer',
                   13:'Project Manager',
                   14:'Software Developer',
                   15:'Software Tester',
                   16:'Technical Writer'}
      
      final_res = {}
      for i in range(len(jobs_dict)):
         final_res[jobs_dict[i]] = all_jobs_predict[i]

      print("PREDICTED", final_res)

      # filter the jobs with probability greater than 0.5
      final_res = {k:v for k,v in final_res.items() if v > 0}
      
      
    #   return jsonify({ "final_result" : final_res})
      return render_template("testafter.html",final_res=final_res)
      
if __name__ == '__main__':
   app.run(debug = True)
