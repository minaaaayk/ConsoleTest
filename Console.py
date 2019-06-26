import requests
# defining the api-endpoint  
API_ENDPOINT = "http://127.0.0.1/note/Target.php"

  
# your API key here 
API_KEY = "1234"
  
# your source code here 
source_code = ''' 
print("Hello, world!") 
a = 1 
b = 2 
print(a + b) 
'''

Text = input("Enter new Note: ")
  
# data to be sent to api 
data = {'api_dev_key':API_KEY, 'text':Text}
  
# sending post request and saving response as response object 
r = requests.post(url = API_ENDPOINT, data = data) 
  
# extracting response text  
pastebin_url = r.text 
print("The pastebin URL is:%s"%pastebin_url) 
