FROM python:3.8-alpine

ADD requirements.txt /tmp
RUN pip install -r /tmp/requirements.txt

EXPOSE 8000
CMD python index.py 
