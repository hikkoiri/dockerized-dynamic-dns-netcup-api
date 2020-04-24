FROM php:alpine3.11

#create home folder
ENV APP_HOME=/opt/app/
WORKDIR $APP_HOME

# application specific
COPY *.php ./

# for the cron job
#run.sh
ENV RUN_SH_FILE=${APP_HOME}run.sh
COPY run.sh ./

#crontab
ENV CRONTAB_FILE=/var/spool/cron/crontabs/root
RUN echo "*/5 * * * * ${RUN_SH_FILE}" > ${CRONTAB_FILE}

RUN chmod +x ${CRONTAB_FILE} ${RUN_SH_FILE}
CMD crond -f -l 2
