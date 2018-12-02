#!/bin/bash

BASE_DIR=$(cd $(dirname $0); cd ../; pwd)
TARGET=${BASE_DIR}/phpBB
echo 'BASE_DIR: '${BASE_DIR}


#
# git clean
echo '|| Git Init:'
cd ${BASE_DIR}
# Restore the removed files
git reset --hard
# Remove the local changes & untracked files&folders
git clean -f -x -d
echo '   Git Init: Done'


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


#
# Clean up: tests,examples,builds,...
echo '|| Clean '
# Create an empty config.php
touch ${TARGET}/config.php

rm -rf ${TARGET}/develop
rm -rf ${TARGET}/composer.json
rm -rf ${TARGET}/composer.lock
rm -rf ${TARGET}/install/data
rm -rf ${TARGET}/install/install_update.php
echo '   Clean: Done'


#
# Compress to bz2
echo '|| Package'
if [ ! -d ${BASE_DIR}/target ]; then
    mkdir -p ${BASE_DIR}/target
else
    rm -rf ${BASE_DIR}/target/*
fi

# Full package
tar cjf ${BASE_DIR}/target/phpbb_zh.tar.bz2 phpBB
echo '   Package: Done'
