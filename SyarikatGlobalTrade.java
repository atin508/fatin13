//aturcara ini ialah aturcara amali
import java.util.Scanner;
public class SyarikatGlobalTrade
{
	public static void main(String[] args){
	Scanner input= new Scanner(System.in);

	String namaPekerja;
	int bilHari;
	int kadarPembayaranGaji;
	System.out.println("Nama Pekerja");
	namaPekerja= input.nextLine();

	System.out.println("Masukkan bilangan hari bekerja .");
	bilHari = input.nextInt();

	if (bilHari <=31){
		kadarPembayaranGaji= bilHari*160; //1hari* 160 gaji= gaji bulanan
	
	} else {
	System.out.println("Bilangan hari tidak boleh melebihi 31 hari ");
	System.out.println("Masukkan semula bilangan hari bekerja:");
	bilHari = input.nextInt();
	kadarPembayaranGaji = bilHari*160;
}

System.out.println("Rumusan gaji bulanan bagi " + namaPekerja);
	System.out.println("Jumlah hari bekerja " + bilHari + " hari ");
	System.out.println("GAJI SEBULAN ADALAH " + kadarPembayaranGaji + " Gaji ");
	kadarPembayaranGaji = bilHari*160;
}
}
