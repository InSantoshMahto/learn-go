package main

import "fmt"

func echo(str string) string {
	msg := "I Love" + " " + str;
	return msg
}

func main() {
	var score int = 10
	fmt.Println(score)
	fmt.Println("Hello Go Lang")
     str := echo("Go")
	fmt.Println(str)
}