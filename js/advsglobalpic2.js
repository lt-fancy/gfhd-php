$(document).ready(function() {
	
	var AO=$("#advsexDiv");
	var AL=$("#advsex");
	var AOF=AO.offset();

	//����δ�����汾�жϣ���ֹδ����ʱ���뱾�������
	if(AL.length>0 && AO.length){      
		AL[0].style.background=AO[0].style.background;
		AL.css({height: AO[0].offsetHeight+"px",top:AOF.top+"px"});
		AL.show();
	}

});
