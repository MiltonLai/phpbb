#!/bin/bash

function browse() {
    if [ ! -d $2  ];then
        mkdir $2
    fi

    for element in `ls $1`
    do
        dir_or_file=$1'/'$element
        if [ -d $dir_or_file ]
        then
            browse $dir_or_file $2'/'$element
        else
            conv $dir_or_file $2'/'$element
        fi
    done
}

# opencc -c s2twp.json -i common.php -o common2.php
function conv() {
    echo -n '.'
    opencc -c ${OPENCC_CONFIG} -i $1 -o $2
}

if [ -z $1 ] || [ -z $2 ] || [ -z $3 ]; then
    echo $"Usage: $0 [config_file] [from_folder] [to_folder]"
    exit 2
else
    OPENCC_CONFIG=$1
    src=${2%/}
    tgt=${3%/}
fi
echo -n 'Coverting '$src
browse $src $tgt
echo 'completed'

