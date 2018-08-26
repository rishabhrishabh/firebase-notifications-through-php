package com.example.rb.notificationsusingphp;

import android.app.DownloadManager;
import android.content.Context;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.toolbox.Volley;

public class MySingleton {

    private static MySingleton mInstance;
    private static Context mycontext;
    private RequestQueue requestQueue;

    private MySingleton(Context context)
    {
        mycontext=context;
        requestQueue=getRequestQueue();
    }

    private RequestQueue getRequestQueue()
    {
        if(requestQueue==null)
        {
            requestQueue= Volley.newRequestQueue(mycontext.getApplicationContext());

        }
        return requestQueue;


    }

    public static synchronized MySingleton getmInstance(Context context)
    {
        if(mInstance==null)
        {

            mInstance=new MySingleton(context);

        }
        return mInstance;



    }

    public<T> void addToRequestque(Request<T> request)
    {
        getRequestQueue().add(request);



    }

}
