import sys
from inference_sdk import InferenceHTTPClient

image=sys.argv[1]

CLIENT = InferenceHTTPClient(
    api_url="https://detect.roboflow.com",
    api_key="jsQeaawuAK11z8EVExh3"
)

# infer on a local image
result = CLIENT.infer(image, model_id="pbkk-6udbx/1")

top_prediction = max(result['predictions'], key=lambda x: x['confidence'])

print(top_prediction['class'])
