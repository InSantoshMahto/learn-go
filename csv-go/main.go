package main

import (
	"encoding/csv"
	"errors"
	"fmt"
	"io"
	"os"
)

func main() {
	batchIds, err := getBatchFromCsv("batch.csv")
	if err != nil {
		fmt.Printf("Fail at read csv file:-%s\t", err.Error())
		return
	}
	fmt.Println(batchIds)
}

func getBatchFromCsv(filePath string) (map[string]int, error) {
	f, err := os.Open(filePath)
	if err != nil {
		return nil, errors.New(fmt.Sprintf("ReadCsvFile Error %s\n", err.Error()))
	}
	r := csv.NewReader(f)
	var batchIds = make(map[string]int)
	for {
		record, err := r.Read()
		if err == io.EOF {
			break
		}
		if err != nil {
			return nil, errors.New(fmt.Sprintf("ReadCsvFile Error %s\n", err.Error()))
		}
		for _, value := range record {
			batchIds[value] = 1
		}
	}
	return batchIds, nil
}
