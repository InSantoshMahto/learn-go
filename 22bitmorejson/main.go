package main

import (
	"encoding/json"
	"fmt"
)

type course struct {
	Name     string `json:"courseName"`
	Price    int
	Platform string   `json:"website"`
	Password string   `json:"-"`
	Tags     []string `json:"tags,omitempty"`
}

func main() {
	fmt.Println("Welcome to JSON n golang")
	EncodeJson()
	DecodeJson()
}

func EncodeJson() {
	courses := []course{
		{"ReactJS Bootcamp", 299, "LearnCodeOnline.in", "abc123", []string{"web", "js"}},
		{"Swift Bootcamp", 199, "LearnCodeOnline.in", "bcd123", []string{"apple", "iso"}},
		{"Angular Bootcamp", 299, "LearnCodeOnline.in", "hit123", nil},
	}
	// package this data as JSON data
	json, err := json.MarshalIndent(courses, "", "\t")
	if err != nil {
		panic(err)
	}
	fmt.Printf("%s\n", json)
}

func DecodeJson() {
	jsonDataFromWeb := []byte(`
	{
		"courseName": "ReactJS Bootcamp",
		"Price": 299,
		"website": "LearnCodeOnline.in",
		"tags": ["web-dev","js"]
	}
	`)
	var course course
	checkValid := json.Valid(jsonDataFromWeb)
	if checkValid {
		fmt.Println("JSON was valid")
		json.Unmarshal(jsonDataFromWeb, &course)
		fmt.Printf("%#v\n", course)
	} else {
		fmt.Println("JSON WAS NOT VALID")
	}
	// some cases where you just want to add data to key value
	var myOnlineData map[string]interface{}
	json.Unmarshal(jsonDataFromWeb, &myOnlineData)
	fmt.Printf("%#v\n", myOnlineData)
	for k, v := range myOnlineData {
		fmt.Printf("Key is %v  and value is %v and Type is: %T\n", k, v, v)
	}
}
