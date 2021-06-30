import os
from multiprocessing import Process, process
import sqlite3
import requests


def callcam():
    os.system('python detect_video_1.py --weights1 ./checkpoints/yolov4-416 --size1 416 --model yolov4 --count1 --video1 rtsp://admin:Tatlong-B1b3@172.16.0.98/H264?ch=1&subtype=0')

def callcam2():
    os.system('python detect_video_2.py --weights1 ./checkpoints/yolov4-416 --size1 416 --model yolov4 --count --video1 rtsp://admin:Tatlong-B1b3@172.16.0.99/H264?ch=1&subtype=0')

def senddata():
    conn = sqlite3.connect('people1.db')
    total1 = conn.execute("SELECT totalPeople FROM peopleCount1")
    total2 = conn.execute("SELECT totalPeople FROM peopleCOunt2")
    camera1 = list(total1)
    camera2 = list(total2)
    conn.close()
    
    n1 = camera1[-1][0]
    n2 = camera2[-1][0]

    #res = requests.post('http://127.0.0.1:5000/', json={"people1":n1, "people2":n2})
    #if res.ok:
    #    print('Data has been sent')

if __name__ == '__main__':
    #172.16.0.98
    cam1 = Process(target = callcam)
    cam1.start()
    #172.16.0.99
    cam2 = Process(target = callcam2)
    cam2.start()

    deliverdata = Process(target = senddata)
    deliverdata.start()






   