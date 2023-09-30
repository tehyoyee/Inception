FROM python:debian:bullseye

COPY ./conf/requirements.txt requirements.txt
RUN pip install -r requirements.txt

COPY ./tools/app.py /app/

WORKDIR /app

CMD ["python3", "-m", "flask", "run", "--host=0.0.0.0"]
