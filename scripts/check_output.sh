#!/bin/bash

echo "Testing the die() on files"

cd wp-content

if grep -E "(^|\ )die\(('|\")" -r --include=\*.php; then exit 1
fi

echo "Testing the var_dump() on files"

if grep -E "(^|\ )var_dump\(('|\")" -r --include=\*.php; then exit 1
fi

echo "Testing the print_r() on files"

if grep -E "(^|\ )print_r\(('|\")" -r --include=\*.php; then exit 1
fi

cd ..