function rei(file1,file2,width,height,bgcolor,quality,name){
        document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+width+'" height="'+height+'" id="'+name+'">');  //�÷����÷��̾� ������ ���������ϰ�� ���� 8�� ����
        document.write('<param name="movie" value="'+file1+'" />');
        document.write('<param name="quality" value="'+quality+'" />');
        document.write('<param name="wmode" value="transparent" />');  //�����÷����� �ƴҰ�� �� ������ ����
        document.write('<param name="bgcolor" value="'+bgcolor+'" />');
        document.write('<embed src="'+file2+'" quality="'+quality+'" wmode="transparent" bgcolor="'+bgcolor+'" width="'+width+'" height="'+height+'" name="'+name+'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
        document.write('</object>')
}