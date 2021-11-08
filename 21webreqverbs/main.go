package main

import (
	"fmt"
	"io/ioutil"
	"net/http"
	"net/url"
	"strings"
)

func main() {
	fmt.Println("Welcome to web verb video - LCO")
	PerformGetRequest()
	PerformPostJsonRequest()
	PerformPostWXUrlEncodedRequest()
}

func PerformGetRequest() {
	const myUrl = "http://localhost:8000/get"
	response, err := http.Get(myUrl)
	if err != nil {
		panic(err)
	}
	defer response.Body.Close()
	fmt.Println("Status code: ", response.StatusCode)
	// var responseString strings.Builder
	content, _ := ioutil.ReadAll(response.Body)
	// byteCount, _ := responseString.Write(content)
	// fmt.Println("ByteCount is: ", byteCount)
	// fmt.Println(responseString.String())
	// fmt.Println(content)
	fmt.Println(string(content))
}

func PerformPostJsonRequest() {
	const myUrl = "http://localhost:8000/post"
	// fake json payload
	requestBody := strings.NewReader(`
		{
			"courseName":"Let's go with golang",
			"price": 0,
			"platform":"learnCodeOnline.in"
		}
	`)
	response, err := http.Post(myUrl, "application/json", requestBody)
	if err != nil {
		panic(err)
	}
	defer response.Body.Close()
	content, _ := ioutil.ReadAll(response.Body)
	fmt.Println(string(content))
}

func PerformPostWXUrlEncodedRequest() {
	const myUrl = "http://localhost:8000/post-form-url-encoded"
	// x-www-form-url-encoded
	data := url.Values{}
	data.Add("firstName", "hit")
	data.Add("email", "hitesh@go.dev")
	response, err := http.PostForm(myUrl, data)
	if err != nil {
		panic(err)
	}
	defer response.Body.Close()
	content, _ := ioutil.ReadAll(response.Body)
	fmt.Println(string(content))
}
