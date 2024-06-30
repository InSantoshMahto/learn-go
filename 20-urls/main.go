package main

import (
	"fmt"
	"net/url"
)

const myUrl string = "https://lco.dev:3000/learn?courseName=reactJs&paymentId=s3h5kk64onw"

func main() {
	fmt.Println("Welcome to handling url in golang")
	fmt.Println(myUrl)

	// parse url
	result, _ := url.Parse(myUrl)
	// fmt.Println(result.Scheme, result.Host, result.Port(), result.Path, result.RawQuery)

	queryParams := result.Query()
	fmt.Printf("Type of query params are: %T\n", queryParams)
	fmt.Println(queryParams["courseName"])

	for _, queryParam := range queryParams {
		fmt.Println("Query param is:- ", queryParam)
	}

	partsOfUrl := &url.URL{
		Scheme:  "https",
		Host:    "lco.dev",
		Path:    "/tutcss",
		RawPath: "user=hit",
	}
	anotherURL := partsOfUrl.String()
	fmt.Println(anotherURL)
}
