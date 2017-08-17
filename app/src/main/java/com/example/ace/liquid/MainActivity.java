package com.example.ace.liquid;

import android.annotation.TargetApi;
import android.icu.text.SimpleDateFormat;
import android.icu.util.Calendar;
import android.icu.util.GregorianCalendar;
import android.os.Build;
import android.os.Bundle;
import android.support.annotation.RequiresApi;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import org.w3c.dom.Text;

import java.text.ParseException;
import java.util.Date;
import java.util.Locale;

public class MainActivity extends AppCompatActivity {

    public Button btnHEA, btnHED, btnHIC, btnHSA;
    public EditText etChofer, etGuia, etChequeador, etCamion;
    public String FechaActual, HSA, HEA, HIC, HED;
    public int horaFinal, HoraInicio;
    public Calendar c;
    @RequiresApi(api = Build.VERSION_CODES.N)
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        c = Calendar.getInstance();
        System.out.println("Current time => "+c.getTime());


        btnHEA = (Button) findViewById(R.id.btnHEA);
        btnHED = (Button) findViewById(R.id.btnHED);
        btnHIC = (Button) findViewById(R.id.btnHIC);
        btnHSA = (Button) findViewById(R.id.btnHSA);
        etChofer = (EditText) findViewById(R.id.etChofer);
        final TextView tvHEA = (TextView) findViewById(R.id.tvHEA);
        final TextView tvHED = (TextView) findViewById(R.id.tvHED);
        final TextView tvHIC = (TextView) findViewById(R.id.tvHIC);
        final TextView tvHSA = (TextView) findViewById(R.id.tvHSA);
        final TextView tvFA = (TextView) findViewById(R.id.tvFechaA);
        // Boton Hora Entrada al Almacen
        btnHEA.setOnClickListener(new View.OnClickListener() {
            @TargetApi(Build.VERSION_CODES.N)
            @Override
            public void onClick(View view) {
                HEA = getHoraActual();
                tvHEA.setText(HEA);
            }
        });
        // Boton Hora Entrada al Deposito
        btnHED.setOnClickListener(new View.OnClickListener() {
            @TargetApi(Build.VERSION_CODES.N)
            @Override
            public void onClick(View view) {
                HED = getHoraActual();
                tvHED.setText(HED);
                FechaActual = getFechaActual();
                tvFA.setText(FechaActual);

                Calendar antes = Calendar.getInstance();
                HoraInicio = antes.get(Calendar.MINUTE);
                Toast.makeText(getApplicationContext(), Integer.toString(HoraInicio), Toast.LENGTH_LONG).show();
            }
        });
        // Boton Hora Inicio Chequeo
        btnHIC.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                HIC = getHoraActual();
                tvHIC.setText(HIC);
            }
        });
        // Boton Hora Salida Almacen
        btnHSA.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                HSA = getHoraActual();
                tvHSA.setText(HSA);

                Calendar ahora = Calendar.getInstance();
                horaFinal = ahora.get(Calendar.MINUTE);

                Toast.makeText(getApplicationContext(), "Tiempo Esperado: " + Integer.toString(horaFinal - HoraInicio), Toast.LENGTH_LONG).show();
            }
        });
    }

    @RequiresApi(api = Build.VERSION_CODES.N)
    public static String getHoraActual() {
        Date ahora = new Date();
        SimpleDateFormat formateador = new SimpleDateFormat("hh:mm:ss");
        return formateador.format(ahora);
    }

    //Metodo usado para obtener la fecha actual
    //@return Retorna un <b>STRING</b> con la fecha actual formato "dd-MM-yyyy"
    @RequiresApi(api = Build.VERSION_CODES.N)
    public static String getFechaActual() {
        Date ahora = new Date();
        SimpleDateFormat formateador = new SimpleDateFormat("dd-MM-yyyy");
        return formateador.format(ahora);
    }

}
