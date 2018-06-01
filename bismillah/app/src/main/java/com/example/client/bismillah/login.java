package com.example.client.bismillah;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.example.client.bismillah.chiel.AppController;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by Kuncoro on 03/24/2017.
 */
public class login extends AppCompatActivity {

    ProgressDialog pDialog;
    Button btn_register, btn_login;
<<<<<<< HEAD
    EditText txt_username, txt_password, txt_email;
=======
    EditText txt_username, txt_password;
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4
    Intent intent;

    int success;
    ConnectivityManager conMgr;

    private String url = server.URL + "Login.php";

    private static final String TAG = login.class.getSimpleName();

    private static final String TAG_SUCCESS = "success";
    private static final String TAG_MESSAGE = "message";

    public final static String TAG_USERNAME = "username";
<<<<<<< HEAD
    public final static String TAG_ID = "nama";
    public final static String TAG_EMAIL = "email";
    public final static String TAG_ALAMAT = "alamat";
    public final static String TAG_NOHP = "nohp";
=======
    public final static String TAG_ID = "nim";
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4

    String tag_json_obj = "json_obj_req";

    SharedPreferences sharedpreferences;
    Boolean session = false;
<<<<<<< HEAD
    String nama, username, email, alamat, nohp;
=======
    String nim, username;
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4
    public static final String my_shared_preferences = "my_shared_preferences";
    public static final String session_status = "session_status";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);

        conMgr = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);
        {
            if (conMgr.getActiveNetworkInfo() != null
                    && conMgr.getActiveNetworkInfo().isAvailable()
                    && conMgr.getActiveNetworkInfo().isConnected()) {
            } else {
                Toast.makeText(getApplicationContext(), "No Internet Connection",
                        Toast.LENGTH_LONG).show();
            }
        }

        btn_login = (Button) findViewById(R.id.btn_login);
        btn_register = (Button) findViewById(R.id.btn_register);
        txt_username = (EditText) findViewById(R.id.txt_username);
        txt_password = (EditText) findViewById(R.id.txt_password);
<<<<<<< HEAD
        //txt_email = (EditText) findViewById(R.id.txt_email);
=======
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4

        // Cek session login jika TRUE maka langsung buka MainActivity
        sharedpreferences = getSharedPreferences(my_shared_preferences, Context.MODE_PRIVATE);
        session = sharedpreferences.getBoolean(session_status, false);
<<<<<<< HEAD
        nama = sharedpreferences.getString(TAG_ID, null);
        username = sharedpreferences.getString(TAG_USERNAME, null);
        email = sharedpreferences.getString(TAG_EMAIL, null);



        if (session) {
            Intent intent = new Intent(login.this, Profil.class);
            intent.putExtra(TAG_ID, nama);
            intent.putExtra(TAG_USERNAME, username);
            intent.putExtra(TAG_EMAIL, email);

=======
        nim = sharedpreferences.getString(TAG_ID, null);
        username = sharedpreferences.getString(TAG_USERNAME, null);

        if (session) {
            Intent intent = new Intent(login.this, MainActivity.class);
            intent.putExtra(TAG_ID, nim);
            intent.putExtra(TAG_USERNAME, username);
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4
            finish();
            startActivity(intent);
        }


        btn_login.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                String username = txt_username.getText().toString();
                String password = txt_password.getText().toString();

<<<<<<< HEAD

=======
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4
                // mengecek kolom yang kosong
                if (username.trim().length() > 0 && password.trim().length() > 0) {
                    if (conMgr.getActiveNetworkInfo() != null
                            && conMgr.getActiveNetworkInfo().isAvailable()
                            && conMgr.getActiveNetworkInfo().isConnected()) {
                        checkLogin(username, password);
                    } else {
                        Toast.makeText(getApplicationContext() ,"No Internet Connection", Toast.LENGTH_LONG).show();
                    }
                } else {
                    // Prompt user to enter credentials
                    Toast.makeText(getApplicationContext() ,"Kolom tidak boleh kosong", Toast.LENGTH_LONG).show();
                }
            }
        });

        btn_register.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                intent = new Intent(login.this, Register.class);
                finish();
                startActivity(intent);
            }
        });

    }

    private void checkLogin(final String username, final String password) {
        pDialog = new ProgressDialog(this);
        pDialog.setCancelable(false);
        pDialog.setMessage("Logging in ...");
        showDialog();

        StringRequest strReq = new StringRequest(Request.Method.POST, url, new Response.Listener<String>() {

            @Override
            public void onResponse(String response) {
                Log.e(TAG, "Login Response: " + response.toString());
                hideDialog();

                try {
                    JSONObject jObj = new JSONObject(response);
                    success = jObj.getInt(TAG_SUCCESS);

                    // Check for error node in json
                    if (success == 1) {
                        String username = jObj.getString(TAG_USERNAME);
<<<<<<< HEAD
                        String nama = jObj.getString(TAG_ID);
                        String email = jObj.getString(TAG_EMAIL);
                        String alamat = jObj.getString(TAG_ALAMAT);
                        String nohp = jObj.getString(TAG_NOHP);
=======
                        //String nim = jObj.getString(TAG_ID);
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4

                        Log.e("Successfully Login!", jObj.toString());

                        Toast.makeText(getApplicationContext(), jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();

                        // menyimpan login ke session
                        SharedPreferences.Editor editor = sharedpreferences.edit();
                        editor.putBoolean(session_status, true);
<<<<<<< HEAD
                        editor.putString(TAG_ID, nama);
                        editor.putString(TAG_USERNAME, username);
                       editor.putString(TAG_EMAIL, email);
                       editor.putString(TAG_ALAMAT, alamat);
                        editor.putString(TAG_NOHP, nohp);
                        editor.commit();

                        // Memanggil main activity
                       Intent intent = new Intent(login.this, Profil.class);
                        //intent.putExtra(TAG_ID, nama);
                        //intent.putExtra(TAG_USERNAME, username);
                        //intent.putExtra(TAG_EMAIL,email);
                        //intent.putExtra(TAG_ALAMAT,alamat);
                        //intent.putExtra(TAG_NOHP,nohp);
=======
                        //editor.putString(TAG_ID, nim);
                        editor.putString(TAG_USERNAME, username);
                        editor.commit();

                        // Memanggil main activity
                        Intent intent = new Intent(login.this, MainActivity.class);
                        intent.putExtra(TAG_ID, nim);
                        intent.putExtra(TAG_USERNAME, username);
>>>>>>> 5a4846e67105d2bdbe1e167aab1d1b03f91daaa4
                        finish();
                        startActivity(intent);
                    } else {
                        Toast.makeText(getApplicationContext(),
                                jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();

                    }
                } catch (JSONException e) {
                    // JSON error
                    e.printStackTrace();
                }

            }
        }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e(TAG, "Login Error: " + error.getMessage());
                Toast.makeText(getApplicationContext(),
                        error.getMessage(), Toast.LENGTH_LONG).show();

                hideDialog();

            }
        }) {

            @Override
            protected Map<String, String> getParams() {
                // Posting parameters to login url
                Map<String, String> params = new HashMap<String, String>();
                params.put("username", username);
                params.put("password", password);

                return params;
            }

        };

        // Adding request to request queue
        AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);
    }

    private void showDialog() {
        if (!pDialog.isShowing())
            pDialog.show();
    }

    private void hideDialog() {
        if (pDialog.isShowing())
            pDialog.dismiss();
    }
}