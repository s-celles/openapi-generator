/**
 *
 * Please note:
 * This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit this file manually.
 *
 */

@file:Suppress(
    "ArrayInDataClass",
    "EnumEntryName",
    "RemoveRedundantQualifierName",
    "UnusedImport"
)

package org.openapitools.client.models


import kotlinx.serialization.Serializable
import kotlinx.serialization.SerialName
import kotlinx.serialization.Contextual
import kotlinx.serialization.KSerializer
import kotlinx.serialization.Serializer
import kotlinx.serialization.builtins.serializer
import kotlinx.serialization.encoding.Decoder
import kotlinx.serialization.encoding.Encoder
import android.os.Parcelable
import kotlinx.parcelize.Parcelize

/**
 * An order for a pets from the pet store
 *
 * @param id 
 * @param petId 
 * @param quantity 
 * @param shipDate 
 * @param status Order Status
 * @param complete 
 */
@Parcelize
@Serializable

data class Order (

    @SerialName(value = "id")
    val id: kotlin.Long? = null,

    @SerialName(value = "petId")
    val petId: kotlin.Long? = null,

    @SerialName(value = "quantity")
    val quantity: kotlin.Int? = null,

    @Contextual @SerialName(value = "shipDate")
    val shipDate: java.time.OffsetDateTime? = null,

    /* Order Status */
    @SerialName(value = "status")
    val status: Order.Status? = null,

    @SerialName(value = "complete")
    val complete: kotlin.Boolean? = false

) : Parcelable {

    /**
     * Order Status
     *
     * Values: placed,approved,delivered,unknown_default_open_api
     */
    @Serializable(with = StatusSerializer::class)
    enum class Status(val value: kotlin.String) {
        @SerialName(value = "placed") placed("placed"),
        @SerialName(value = "approved") approved("approved"),
        @SerialName(value = "delivered") delivered("delivered"),
        @SerialName(value = "unknown_default_open_api") unknown_default_open_api("unknown_default_open_api");
    }

    internal object StatusSerializer : KSerializer<Status> {
        override val descriptor = kotlin.String.serializer().descriptor

        override fun deserialize(decoder: Decoder): Status {
            val value = decoder.decodeSerializableValue(kotlin.String.serializer())
            return Status.values().firstOrNull { it.value == value }
                ?: Status.unknown_default_open_api
        }

        override fun serialize(encoder: Encoder, value: Status) {
            encoder.encodeSerializableValue(kotlin.String.serializer(), value.value)
        }
    }

}

