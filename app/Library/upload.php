<?php

	function myupload($fname,$filepath,$request,$type=array('png','jpg','jpeg','gif'))

	{
        if(!file_exists($filepath)){
             mkdir($filepath,0700);
        }

	   //随机命名
        $name = time()+rand(1,10000);
        //获取上传图片信息
        $file = $request->file($fname);
        //设置数组
        $newpath = array();
        foreach ($file as $key => $value) {
             //获取文件后缀
             $ext = $value->getClientOriginalExtension();
             //判断后缀
             if(!in_array($ext,$type)){
                    return 0;
             }
             //拼接文件名字
             $newfilename = $name.'.'.$ext;
             //保存到数组
             $newpath[] = $filepath.'/'.$newfilename;
             //上传文件
             $value->move($filepath,$newfilename); 
        }
        //返回路径名
        return $newpath;
	}


    function xinwen($type='top')
    {
            $host = "http://toutiao-ali.juheapi.com";
            $path = "/toutiao/index";
            $method = "GET";
            $appcode = "454a809d1e914ec6bcd115bd126ec787";
            $headers = array();
            array_push($headers, "Authorization:APPCODE " . $appcode);
            $querys = "type={$type}";
            $bodys = "";
            $url = $host . $path . "?" . $querys;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_FAILONERROR, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, true);
            if (1 == strpos("$".$host, "https://"))
            {
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            }
             $ha=(curl_exec($curl));
             preg_match('/{.*}/', $ha, $result);
             $json = json_decode($result[0]);
             $sk1=$json->result->data[0]->title;
             $sk2=$json->result->data[0]->author_name;
             $sk3=$json->result->data[0]->thumbnail_pic_s;
             $sk4=$json->result->data[0]->url;
             $txapi =  $json->result;
             return $txapi;
    }
?>