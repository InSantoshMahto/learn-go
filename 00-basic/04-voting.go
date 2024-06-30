package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
	"strings"
)

func main() {
	reader := bufio.NewReader(os.Stdout)
	fmt.Print("Enter your age: ")
	ageString, _ := reader.ReadString('\n')
	ageStringTrim := strings.TrimSpace(ageString)
	age, _ := strconv.ParseInt(ageStringTrim, 10, 64)

	if age >= 18 {
		fmt.Println("You are eligible voting")
	} else {
		fmt.Println("Not eligible for voting")
	}
}
