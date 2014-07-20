#include <stdio.h>

int main( void )
{
	FILE *fp;
	int num,i,j;
	int result[8];

	fp = fopen("./p00p.txt", "r" );
	fscanf( fp, "%d", &num );
	fclose( fp );

	
	result[0]=(num/10000000)%10;
	result[1]=(num/1000000)%10;
	result[2]=(num/100000)%10;
	result[3]=(num/10000)%10;
	result[4]=(num/1000)%10;
	result[5]=(num/100)%10;
	result[6]=(num/10)%10;
	result[7]=(num%10);

	printf("Content-type: text/html\n\n");

	for(i=0 ; i<8 ; i++ )
	{	
		switch(result[i])
		{
			case 0 :
				printf("<img src='./image/0.PNG'>");
				break;
			case 1 :
				printf("<img src='./image/1.png'>");
				break;
			case 2 :
				printf("<img src='./image/2.PNG'>");
				break;
			case 3 : 
				printf("<img src='./image/3.PNG'>");
				break;
			case 4 :
				printf("<img src='./image/4.PNG'>");
				break;
			case 5 :
				printf("<img src='./image/5.PNG'>");
				break;
			case 6 :
				printf("<img src='./image/6.PNG'>");
				break;
			case 7 :
				printf("<img src='./image/7.PNG'>");
				break;
			case 8 :
				printf("<img src='./image/8.PNG'>");
				break;
			case 9 :
				printf("<img src='./image/9.PNG'>");
				break;
		}
	}
	
	printf("%d\n", num );

	num++;

	fp = fopen("./p00p.txt", "w" );
	fprintf( fp, "%d", num);
	fclose(fp);

}
