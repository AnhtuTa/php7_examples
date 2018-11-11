//file script này chỉ chạy hàm eqfeed_callback mà thôi!
//hàm này nhận tham số là data dạng .json của các nơi mà muốn
//hiển thị trên bản đồ
eqfeed_callback(
[
	{
		"type": "Feature",
		"geometry": {
			"type": "Point",
			"coordinates": [10.1, 125.6]
		},
		"properties": {
			"name": "Dinagat Islands"
		}
	},
	{
		"type": "Feature",
		"geometry": {
			"type": "Point",
			"coordinates": [20.958889, 105.800678]
		},
		"properties": {
			"name": "Nhà của tao!"
		}
	},
	{
		"type": "Feature",
		"geometry": {
			"type": "Point",
			"coordinates": [10.773266, 106.659690]
		},
		"properties": {
			"name": "Trường ĐHBK TP.HCM"
		}
	}
]);