#!/bin/bash

BASE_DIR=$(cd $(dirname $0); cd ../; pwd)
TARGET=${BASE_DIR}/phpBB
echo '|| BASE_DIR: '${BASE_DIR}

#
# check folder existence
if [ ! -d ${TARGET} ]; then
    echo 'Error: folder ${BASE_DIR}/phpBB not found.'
    exit 1
fi


#
# generate Chinese Traditional language package
echo '|| Convert:'
rm -rf ${TARGET}/language/zh_cmn_hant/

${BASE_DIR}/build/convert.sh ${BASE_DIR}/build/opencc_dictionary/s2twp.json \
    ${TARGET}/language/zh_cmn_hans/ \
    ${TARGET}/language/zh_cmn_hant/
echo '   Convert: Done'
