import java.text.DecimalFormat;
public class Calculadora {
    public static final String ANSI_BLACK = "\u001B[30m";
    public static final String ANSI_RED = "\u001B[31m";
    public static final String ANSI_GREEN = "\u001B[32m";
    public static final String ANSI_YELLOW = "\u001B[33m";
    public static final String ANSI_BLUE = "\u001B[34m";
    public static final String ANSI_PURPLE = "\u001B[35m";
    public static final String ANSI_CYAN = "\u001B[36m";
    public static final String ANSI_WHITE = "\u001B[37m";
    public static final String ANSI_RESET = "\u001B[0m";
    public static void main(String[] args) {
        if (args.length == 3) {
            try {
                String operacion=args[0];
                double nro1 = Double.parseDouble(args[1]);
                double nro2 = Double.parseDouble(args[2]);
                DecimalFormat df=new DecimalFormat("0.000000");
                System.out.println(ANSI_GREEN);
                if(operacion.equalsIgnoreCase("sumar")) System.out.println(df.format(nro1+nro2));
                if(operacion.equalsIgnoreCase("restar")) System.out.println(df.format(nro1-nro2));
                if(operacion.equalsIgnoreCase("dividir")){
					if(nro2!=0)
						try{
							System.out.println(df.format(nro1/nro2));
						}catch(Exception e){
							System.out.println(ANSI_RED+"Error división por cero!!!");
						}
					else
						System.out.println(ANSI_RED+"Error división por cero!!!");
				}
                if(operacion.equalsIgnoreCase("multiplicar")) System.out.println(df.format(nro1*nro2));
                if(
						!operacion.equalsIgnoreCase("sumar") && 
						!operacion.equalsIgnoreCase("restar") &&
						!operacion.equalsIgnoreCase("dividir") &&
						!operacion.equalsIgnoreCase("multiplicar")){
						System.out.println("Solo se permiten las operaciones sumar - restar - dividir - multiplicar");
				}
            } catch (Exception e) {
                System.out.println(ANSI_RED);
                System.out.println("Ocurrió un error con el ingreso de parámetros de entrada!");
                System.out.println("Se esperan tres parámetros de entrada operacion numero1 numero 2");
                System.out.println("Solo se permiten las operaciones sumar - restar - dividir - multiplicar");
                System.out.println("Ejemplo: java Calculadora sumar 5 6");
            }

        } else {
            System.out.println(ANSI_GREEN);
			System.out.println("-- Programa de Calculadora --");
            System.out.println("Se esperan tres parámetros de entrada operacion numero1 numero 2");
            System.out.println("Solo se permiten las operaciones sumar - restar - dividir - multiplicar");
            System.out.println("Ejemplo: java Calculadora sumar 5 6");
        }
        System.out.println(ANSI_RESET);
    }    
}
