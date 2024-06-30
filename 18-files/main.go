package main

import (
	"fmt"
	"io"
	"os"
	"strconv"
)

func main() {
	fmt.Println("Welcome to files in golang")
	content := "I am Santosh Mahto"
	file, err := os.Create("./iam.txt")
	checkNilErr(err)
	length, err := io.WriteString(file, content)
	checkNilErr(err)
	fmt.Println("Length is ", length)
	defer func(file *os.File) {
		err := file.Close()
		if err != nil {
			panic(err)
		}
	}(file)
	readFile("./iam.txt")
}

func checkNilErr(err error) {
	if err != nil {
		panic(err)
	}
}

func readFile(fileName string) {
	dataBytes, err := os.ReadFile(fileName)
	checkNilErr(err)
	fmt.Println("Text data inside file is\t", string(dataBytes), dataBytes[0], string(dataBytes[0]), strconv.FormatInt(int64(dataBytes[0]), 2))
}
