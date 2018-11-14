<?php
	function myupload($fname,$filepath,$request)
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

?>