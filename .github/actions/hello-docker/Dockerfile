FROM alpine:3.11

#Here this should be done with shellscript(sh)

#copy the current folder entrypoint.sh to destination wdwd/entrypoint.sh
# ENTRYPOINT [ "wdwd/entrypoint.sh" ]

COPY entrypoint.sh /entrypoint.sh

ENTRYPOINT [ "/entrypoint.sh" ]

# CMD ['arg1','arg2']
# This is used to input for arguiments/varianbles when we script all here without an entrypoint.sh 