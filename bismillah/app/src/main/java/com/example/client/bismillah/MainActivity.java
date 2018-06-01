package com.example.client.bismillah;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    Button btn_logout;
    TextView txt_nama, txt_username, txt_alamat, txt_email, txt_noHP;
    String nama, username, email, alamat, nohp;
    SharedPreferences sharedpreferences;

    public static final String TAG_ID = "nama";
    public static final String TAG_USERNAME = "username";
    public static final String TAG_EMAIL = "email";
    public static final String TAG_ALAMAT = "alamat";
    public static final String TAG_NOHP = "nohp";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txt_nama = (TextView) findViewById(R.id.txt_nama);
        txt_username = (TextView) findViewById(R.id.txt_username);
        txt_email = (TextView) findViewById(R.id.txt_email);
        txt_alamat = (TextView) findViewById(R.id.txt_alamat);
        txt_noHP = (TextView) findViewById(R.id.txt_noHP);
        btn_logout = (Button) findViewById(R.id.btn_logout);

        //ambil data dari table
        sharedpreferences = getSharedPreferences(login.my_shared_preferences, Context.MODE_PRIVATE);

        nama = getIntent().getStringExtra(TAG_ID);
        username = getIntent().getStringExtra(TAG_USERNAME);
        email = getIntent().getStringExtra(TAG_EMAIL);
        alamat = getIntent().getStringExtra(TAG_ALAMAT);
        nohp = getIntent().getStringExtra(TAG_NOHP);

        //menampilan data
        txt_nama.setText("Nama : " + nama);
        txt_username.setText("Username : " + username);
        txt_email.setText("Email    : " + email);
        txt_alamat.setText("Alamat   : " + alamat);
        txt_noHP.setText("Telp     : " + nohp);

        btn_logout.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                // update login session ke FALSE dan mengosongkan nilai id dan username
                SharedPreferences.Editor editor = sharedpreferences.edit();
                editor.putBoolean(login.session_status, false);
                editor.putString(TAG_ID, null);
               // editor.putString(TAG_USERNAME, null);
                //editor.putString(TAG_EMAIL, null);
                //editor.putString(TAG_ALAMAT, null);

                editor.commit();

                Intent intent = new Intent(MainActivity.this, login.class);
                finish();
                startActivity(intent);
            }
        });

    }
}
