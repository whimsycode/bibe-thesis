#!/usr/bin/env python
import os
import subprocess

#a = subprocess.Popen(["D:\Repos\yolov4-custom-functions\Git\git-bash.exe", "D:\Repos\yolov4-custom-functions\channel_1.py"])
p = subprocess.Popen(["D:\Repos\yolov4-custom-functions\Git\git-bash.exe","D:/Repos/yolov4-custom-functions/activate.sh"],
                    bufsize=-1, 
                    executable=None, 
                    stdin=None, 
                    stdout=None, 
                    stderr=None, 
                    preexec_fn=None, 
                    close_fds=False, 
                    shell=True
                    #cwd="D:\Repos\yolov4-custom-functions"
                )
#code = "conda activate yolov4-gpu"
#subprocess.STD_INPUT_HANDLE([code])
#subprocess.run(["conda activate yolov4-gpu"])

#import detect_video