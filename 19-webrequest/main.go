package main

import (
	"fmt"
	"io"
	"io/ioutil"
	"net/http"
)

const url = "https://lco.dev"

func main() {
	fmt.Println("LCO web request")

	response, err := http.Get(url)
	if err != nil {
		panic(err)
	}
	fmt.Printf("Response of type %T\n", response)
	defer func(Body io.ReadCloser) {
		err := Body.Close()
		if err != nil {
			panic(err)
		}
	}(response.Body) // it our responsibility
	dataByte, err := ioutil.ReadAll(response.Body)
	if err != nil {
		panic(err)
	}
	body := string(dataByte)
	fmt.Println(body)
}
