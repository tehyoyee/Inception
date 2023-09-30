FROM debian:bullseye

ARG FTP_USR \
    FTP_PWD

RUN apt-get update && apt-get upgrade
RUN apt-get install -y vsftpd 
# && \
    # adduser -h /var/www -s /bin/false -D ${FTP_USR} && \
    # echo "${FTP_USR}:${FTP_PWD}" | /usr/sbin/chpasswd && \
    # adduser ${FTP_USR} root && \
    #!/bin/sh

RUN service vsftpd start
RUN useradd -m ${FTP_USR}
RUN echo  ${FTP_USR}:{$FTP_PWD} | /usr/sbin/chpasswd && \
    chown ${FTP_USR}:${FTP_USR} -R /home/$FTP_USR/ && \
    echo  ${FTP_USR} | tee -a /etc/vsftpd.userlist && \
    service vsftpd stop && \
    sed -i "s|#chroot_local_user=YES|chroot_local_user=YES|g"  /etc/vsftpd.conf && \
    sed -i "s|#local_enable=YES|local_enable=YES|g"  /etc/vsftpd.conf && \
    sed -i "s|#write_enable=YES|write_enable=YES|g"  /etc/vsftpd.conf && \
    sed -i "s|#local_umask=022|local_umask=007|g"  /etc/vsftpd.conf && \
    echo "allow_writeable_chroot=YES" >> /etc/vsftpd.conf &&\
    echo 'seccomp_sandbox=NO' >> /etc/vsftpd.conf && \
    echo 'pasv_enable=YES' >> /etc/vsftpd.conf

WORKDIR /var/www

EXPOSE 21

CMD [ "/usr/sbin/vsftpd", "/etc/vsftpd.conf" ]


# FROM debian:bullseye

# RUN apt-get update && apt-get upgrade
# RUN 