package main

import (
	"fmt"
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
	defer response.Body.Close() // it our responsibility
	dataByte, err := ioutil.ReadAll(response.Body)
	if err != nil {
		panic(err)
	}
	body := string(dataByte)
	fmt.Println(body)
}
