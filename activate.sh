conda activate yolov4-gpu
python detect_video.py --weights ./checkpoints/yolov4-416 --size 416 --model yolov4 --count --video rtsp://admin:Tatlong-B1b3@172.16.0.99/H264?ch=1&subtype=0
#flask run

#python detect_video.py --weights ./checkpoints/yolov4-416 --size 416 --model yolov4 --count --video rtsp://admin:Tatlong-B1b3@172.16.0.98/H264?ch=1&subtype=0
#jak pasaksak ng switch
