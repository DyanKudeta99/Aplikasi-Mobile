package com.example.sam_madura.servis;

import android.app.ActionBar;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.os.Bundle;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;

import butterknife.BindView;
public class Pemesanan extends AppCompatActivity {

    private EditText inputNama,inputNik,inputUmur,inputAlamat,inputNopol,inputJenis;
    private TextView hasilNama,hasilNik,hasilUmur,hasilAlamat,hasilNopol,hasilJenis;

    @BindView(R.id.input_nama)
    EditText input_Nama;
    @BindView(R.id.input_nik)
    EditText input_Nik;
    @BindView(R.id.input_umur)
    EditText input_Umur;
    @BindView(R.id.input_alamat)
    EditText input_alamat;
    @BindView(R.id.input_nomor_polisi)
    EditText input_nomor_polisi;
    @BindView(R.id.input_jenis_kendaraan)
    EditText input_jenis_kendaraan;

    @BindView(R.id.simpan_button)
    Button simpan_button;

    @BindView(R.id.hasil_nama)
    TextView hasil_Nama;
    @BindView(R.id.hasil_nik)
    TextView hasil_Nik;
    @BindView(R.id.hasil_umur)
    TextView hasil_Umur;
    @BindView(R.id.hasil_alamat)
    TextView hasil_alamat;
    @BindView(R.id.hasil_nomor_polisi)
    TextView hasil_nomor_polisi;
    @BindView(R.id.hasil_jenis_kendaraan)
    TextView hasil_jenis_kendaraan;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pemesanan);
        ButterKnife.bind(this);

    }
    @OnClick(R.id.simpan_button)
        public void btnClicked () {
            String nama = input_Nama.getText().toString();
            hasil_Nama.setText(nama);
            String nik = input_Nik.getText().toString();
            hasil_Nik.setText(nik);
            String umur = input_Umur.getText().toString();
            hasil_Umur.setText(umur);
            String alamat = input_alamat.getText().toString();
            hasil_alamat.setText(alamat);
            String nomor_polisi = input_nomor_polisi.getText().toString();
            hasil_nomor_polisi.setText(nomor_polisi);
            String jenis_kendaraan = input_jenis_kendaraan.getText().toString();
            hasil_jenis_kendaraan.setText(jenis_kendaraan);
        }
    }
