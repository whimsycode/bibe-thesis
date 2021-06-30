import time

import requests
import detect_video_1
import detect_video_2
from flask import Flask, render_template, Response, request
import cv2
from tensorflow.python.types.core import Value
#from detect_video import peoplecountingprocess
import subprocess
import sqlite3

app = Flask(__name__)


#a = subprocess.Popen(["D:\Repos\yolov4-custom-functions\Git\git-bash.exe", "D:\Repos\yolov4-custom-functions\channel_1.py"])
#r = subprocess.Popen(["D:\Repos\yolov4-custom-functions\Git\git-bash.exe","python D:/Repos/yolov4-custom-functions/channel_1.py"],
#                    bufsize=-1, 
 #                   executable=None, 
  ##                 #stdout=None, 
    ###              close_fds=True, 
       #            #cwd="D:\Repos\yolov4-custom-functions"
 #               )
#time.sleep(0.5)


def find_camera(id):
    cameras = [
        'rtsp://admin:Tatlong-B1b3@172.16.0.98/H264?ch=1&subtype=0',
        'rtsp://admin:Tatlong-B1b3@172.16.0.99/H264?ch=1&subtype=0']
    return cameras[int(id)]
#  for cctv camera use rtsp://username:password@ip_address:554/user=username_password='password'_channel=channel_number_stream=0.sdp' instead of camera



def gen_frames(camera_id):
     
    cam = find_camera(camera_id)
    cap=  cv2.VideoCapture(cam)
    
    while True:
        # for cap in caps:
        # # Capture frame-by-frame
        success, frame = cap.read()  # read the camera frame
        if not success:
            break
        else:
            ret, buffer = cv2.imencode('.jpg', frame)
            frame = buffer.tobytes()
            yield (b'--frame\r\n'
                b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')  # concat frame one by one and show result


@app.route('/video_feed/<string:id>/', methods=["GET"])
def video_feed(id):
    return Response(gen_frames(id),
                    mimetype='multipart/x-mixed-replace; boundary=frame')


def senddata():
    conn = sqlite3.connect('people1.db')
    total1 = conn.execute("SELECT totalPeople FROM peopleCount1")
    total2 = conn.execute("SELECT totalPeople FROM peopleCOunt2")
    camera1 = list(total1)
    camera2 = list(total2)
    conn.close()
    return camera1, camera2
    

@app.route('/', methods=["GET", "POST"])
def index():
    '''
    try:
        content = request.json
    except TypeError:    
        pass
    '''
    #This is new... (These are the values currently being conunted by the camera, according mark this values can be edited for computation. N1 is a variable the holds the number of people counted.)
    a = senddata()
    n1 = a [0][-1][0]
    n2 = a [1][-1][0]

    return render_template('index.php', numPeople1=n1, numPeople2=n2)


if __name__ == '__main__':
    app.run(host="127.0.0.1" , port="5000" , debug=True)
