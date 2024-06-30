package main

import (
	"fmt"
	"time"
)

func main() {
	fmt.Println("Welcome to time study of golang")

	presentTime := time.Now()
	fmt.Println(presentTime.Format("02-01-2006 15:04:05 Monday"))

	createdDate := time.Date(1997, time.August, 12, 0, 0, 0, 0, time.UTC)
	fmt.Println(createdDate)
	fmt.Println(createdDate.Format("Mon 02-01-2006"))
}
